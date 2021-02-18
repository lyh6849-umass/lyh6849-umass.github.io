from django.db import models

# Create your models here.

class question_db(models.Model):
    q_id= models.CharField(max_length=200)
    q_value = models.CharField(max_length=400)
    question_type = models.CharField(max_length=30)
    class Meta:
        db_table = "question_db"

class answer_db(models.Model):
    a_id= models.CharField(max_length=60)
    a_value = models.CharField(max_length=400)
    q_id = models.CharField(max_length=60)
    class Meta:
        db_table = "answer_db"

class question_suggest(models.Model):
    a_id= models.CharField(max_length=60)
    q_id= models.CharField(max_length=200)
    q_value = models.CharField(max_length=400)
    class Meta:
        db_table = "question_suggest"

class agenda(models.Model):
    p_id= models.CharField(max_length=10)
    prob_free= models.CharField(max_length=300)
    prob_category = models.CharField(max_length=300)
    class Meta:
        db_table = "agenda"