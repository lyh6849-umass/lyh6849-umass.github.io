# Generated by Django 3.1.3 on 2021-01-06 03:59

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('docs', '0003_question_suggest'),
    ]

    operations = [
        migrations.AlterModelTable(
            name='answer_db',
            table='answer_db',
        ),
        migrations.AlterModelTable(
            name='question_db',
            table='question_db',
        ),
        migrations.AlterModelTable(
            name='question_suggest',
            table='question_suggest',
        ),
    ]
