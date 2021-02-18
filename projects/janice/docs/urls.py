from django.urls import path

from . import views

urlpatterns = [
    path ('',views.home, name='home'),
    path ('create_question/',views.createQuestion,name="creat_question") 
]