from django.conf.urls import url
from django.contrib.auth import views as auth_views
from django.urls import path
urlpatterns = [
        path('login/',auth_views.auth_login, name='login'),
        path('logout/',auth_views.auth_logout, name='logout'),
]