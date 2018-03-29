from django.shortcuts import render

# Create your views here.
def index(request):
    name = ("CLACHE")
    args = {'myName': name}
    return render(request,'accounts/home.html', args)

def home (request):
    return render(request,'accounts/login.html')