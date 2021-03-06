# Generated by Django 3.1.3 on 2021-01-06 03:36

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='answer_db',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('a_id', models.CharField(max_length=60)),
                ('a_value', models.CharField(max_length=400)),
                ('q_id', models.CharField(max_length=60)),
            ],
            options={
                'db_table': 'docs_answer_db',
            },
        ),
        migrations.CreateModel(
            name='answer_db3',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('a_id', models.CharField(max_length=60)),
                ('a_value', models.CharField(max_length=400)),
                ('q_id', models.CharField(max_length=60)),
            ],
            options={
                'db_table': 'docs_answer_db3',
            },
        ),
        migrations.CreateModel(
            name='answer_db4',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('a_id', models.CharField(max_length=60)),
                ('a_value', models.CharField(max_length=400)),
                ('q_id', models.CharField(max_length=60)),
            ],
            options={
                'db_table': 'docs_answer_db4',
            },
        ),
        migrations.CreateModel(
            name='question_db',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('q_id', models.CharField(max_length=200)),
                ('q_value', models.CharField(max_length=400)),
                ('question_type', models.CharField(max_length=10)),
            ],
            options={
                'db_table': 'docs_question_db',
            },
        ),
    ]
