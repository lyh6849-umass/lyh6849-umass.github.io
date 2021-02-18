"""janice URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/3.1/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path, include
from docs import views
from django.conf.urls import url
from django.conf import settings
from django.conf.urls.static import static

urlpatterns = [
    path('admin/', admin.site.urls),
    path('',include('docs.urls')),
    path ('test/',views.home2, name='home2'),
    path ('train/',views.home3, name='home3'),
    path ('agenda/',views.agenda2, name='agenda'),
    path('/getQuestions',views.getQuestions,name="getQuestions"),
    url(r'^a_insert$', views.a_insert, name='a_insert'),
    url(r'^q_insert$', views.q_insert, name='q_insert'),
    url(r'^q_type_update$', views.q_type_update, name='q_type_update'),
    url(r'^q_value_update$', views.q_value_update, name='q_value_update'),
    url(r'^a_value_update$', views.a_value_update, name='a_value_update'),
    url(r'^q_delete$', views.q_delete, name='q_delete'),
    url(r'^a_delete$', views.a_delete, name='a_delete'),
    url(r'^test/q_delete$', views.dup_q_delete, name='dup_q_delete'),
    url(r'^test/a_delete$', views.dup_a_delete, name='dup_a_delete'),
    url(r'^test/residual_delete$', views.residual_delete, name='residual_delete'),
    url(r'^test/residual_delete2$', views.residual_delete2, name='residual_delete2'),
    url(r'^agenda/agenda_submit$', views.agenda_subtmit, name='agenda_subtmit'),
    url(r'^home$', views.home, name='home'), 
    ]

if settings.DEBUG: 
    urlpatterns += static(settings.STATIC_URL, document_root=settings.STATIC_ROOT)