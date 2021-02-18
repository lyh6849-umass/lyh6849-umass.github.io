from django.contrib import admin
from docs import models
# Register your models here.

admin.site.register(models.question_db)
admin.site.register(models.answer_db)
admin.site.register(models.question_suggest)
admin.site.register(models.agenda)

