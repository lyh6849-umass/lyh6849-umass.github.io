from django.shortcuts import render, redirect, get_object_or_404
from docs.models import question_db, answer_db, agenda
from django.http import JsonResponse
from docs import models
import sys
import re
from django.template.loader import render_to_string
from google.api_core.client_options import ClientOptions
from google.cloud import automl_v1

# Create your views here.

def home(request):
    val=request.POST
    q_db=question_db.objects.all().order_by('q_id')
    a_db=answer_db.objects.all().order_by('a_id')
    a_db2=answer_db.objects.values('a_id').order_by('a_id')
    answer_array=[]
    question_array=[]
    for a in a_db:
        answer_array.append([a.id,a.a_id,a.a_value,a.q_id])
    for q in q_db:
        question_array.append([q.id,q.q_id,q.q_value,q.question_type])
    return render(request,'index.html',{'q_db':q_db, 'a_db':a_db, 'answer_array':answer_array, 'question_array':question_array})

def home2(request):
    val=request.POST
    q_db=question_db.objects.all().order_by('q_id')
    a_db=answer_db.objects.all().order_by('a_id')
    a_db2=answer_db.objects.values('a_id').order_by('a_id')
    return render(request,'test.html',{'q_db':q_db, 'a_db':a_db, 'result':val})


def home3(request):
    val=request.POST
    q_db=question_db.objects.all().order_by('q_id')
    a_db=answer_db.objects.all().order_by('a_id')
    a_db2=answer_db.objects.values('a_id').order_by('a_id')
    answer_array=[]
    question_array=[]
    for a in a_db:
        answer_array.append([a.id,a.a_id,a.a_value,a.q_id])
    for q in q_db:
        question_array.append([q.id,q.q_id,q.q_value,q.question_type])
    return render(request,'training.html',{'q_db':q_db, 'a_db':a_db, 'answer_array':answer_array, 'question_array':question_array})

def agenda2(request):
    return render(request,'agenda.html',{})

def agenda_subtmit(request):
    new_data = agenda(p_id=request.POST['p_id'],prob_free=request.POST['prob_free'],prob_category="test_category")
    new_data.save()
    return redirect('/')

def training_data_builder(request):
    a_db2=answer_db.objects.values('a_id').order_by('a_id')
    input_list=[]
    for a in a_db2:
        input=""
        b=re.findall("{\'a_id\': \'([a,q,0-9]+)\'}", a)[0]
        original_id=b
        add_id=original_id
        while len(add_id)>0:
            a1 = re.findall("([aq\d]*)([aq])(\d\d\d$)", add_id)
            n1= int(a1[0][2])
            if a1[0][1]=="q":
                q=re.findall("{\'q_value\': \'([a-z,A-Z,\.,\s]+)\'}", str(question_db.objects.values('q_value').get(q_id=add_id)))[0]
                input=q+" "+input
                if n1>1:
                    n1=n1-1
                    add_id= a1[0][0]+a1[0][1]+f'{n1:03}'
                elif n1==1:
                    add_id= a1[0][0]
            elif a1[0][1]=="a":
                a=re.findall("{\'a_value\': \'([a-z,A-Z,\.,\s]+)\'}", str(answer_db.objects.values('a_value').get(a_id=add_id)))[0]
                input=a+" "+input
                n1=n1-1
                add_id= a1[0][0]
        input_list.append(input)
    return input_list

def q_insert(request):
    q_db = question_db(q_id=request.POST['q_id'], q_value=request.POST['q_value'], question_type=request.POST['q_type'])
    q_db.save()
    return redirect('/')


def a_insert(request):
    a_db = answer_db(a_id=request.POST['a_id'], a_value=request.POST['a_value'], q_id=request.POST['q_id'])
    a_db.save()
    return redirect('/')

def q_delete(request):
    target=get_object_or_404(question_db,q_id=request.POST['q_id'])
    target.delete()
    return redirect('/')

def dup_q_delete(request):
    target=get_object_or_404(question_db,id=request.POST['id'])
    target.delete()
    return redirect('/')

def a_delete(request):
    target=get_object_or_404(answer_db,a_id=request.POST['a_id'])
    target.delete()
    return redirect('/')

def dup_a_delete(request):
    target=get_object_or_404(answer_db,id=request.POST['id'])
    target.delete()
    return redirect('/')

def to_data(request):
    val=request.POST
    return render(request,'to_data.html',{'result':val})

def createQuestion(request):
    context={}
    return render(request,'index.html',context)

def a_value_update(request):
    instance = get_object_or_404(answer_db, a_id=request.POST['a_id'])
    instance.a_value=request.POST['a_value']
    instance.save()
    return redirect('/')

def q_value_update(request):
    instance = get_object_or_404(question_db, q_id=request.POST['q_id'])
    instance.q_value=request.POST['q_value']
    instance.save()
    return redirect('/')
    
def q_type_update(request):
    instance = get_object_or_404(question_db, q_id=request.POST['q_id'])
    instance.question_type=request.POST['question_type']
    instance.save()
    return redirect('/')

def question_suggest(request):
    a_db = answer_db(a_id="test", q_value="test", q_id="test")
    a_db.save()
    return redirect('/')


def predict_input(x):
    input=""
    original_id=x
    add_id=original_id
    while len(add_id)>0:
        a1 = re.findall("([aq\d]*)([aq])(\d\d\d$)", add_id)
        n1= int(a1[0][2])
        if a1[0][1]=="q":
            q=re.findall("{\'q_value\': \'([a-z,A-Z,\.,\s]+)\'}", str(question_db.objects.values('q_value').get(q_id=add_id)))[0]
            input=q+" "+input
            if n1>1:
                n1=n1-1
                add_id= a1[0][0]+a1[0][1]+f'{n1:03}'
            elif n1==1:
                add_id= a1[0][0]
        elif a1[0][1]=="a":
            a=re.findall("{\'a_value\': \'([a-z,A-Z,\.,\s]+)\'}", str(answer_db.objects.values('a_value').get(a_id=add_id)))[0]
            input=a+" "+input
            n1=n1-1
            add_id= a1[0][0]
    return input





def getQuestions(request):
    example = request.POST['ajax']
    questions=[]
    extract=re.findall('score:\s(\d+\.\d+)\s+}\s+display_name:\s\"(.{1,50})\"\s+}',str(get_prediction(predict_input(example))),re.DOTALL)
    for i in extract:
        if float(i[0]) > 0.5 : 
            questions.append(i[1])
    queryset=question_db.objects.all()
    #return JsonResponse({"example":questions})
    return JsonResponse({"questions":list(queryset.values()), "example":questions})

def residual_delete(request):
    q_id=request.POST['q_id']
    a_id=request.POST['a_id']
    #q_id=re.findall("{\'q_id\': \'([a-z,A-Z,\.,\s]+)\'}", str(answer_db.objects.values('q_id').get(id=a_id)))[0]
    n=question_db.objects.filter(q_id=q_id).count()
    if n==0:
        target=get_object_or_404(answer_db,id=a_id)
        target.delete()
        return redirect('/')

def residual_delete2(request):
    q_id=request.POST['q_id']
    a_id=request.POST['a_id']
    #q_id=re.findall("{\'q_id\': \'([a-z,A-Z,\.,\s]+)\'}", str(answer_db.objects.values('q_id').get(id=a_id)))[0]
    n=answer_db.objects.filter(a_id=a_id).count()
    if n==0:
        if len(a_id)>3:
            target=get_object_or_404(question_db,id=q_id)
            target.delete()
            return redirect('/')
