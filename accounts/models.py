from django.db import models
from django.db.models.signals import post_save
# Create your models here.

class taikhoan(models.Model):
    username = models.CharField(max_length=8,default='', primary_key=True)
    psd = models.CharField(max_length=20,null=False)
    hoten = models.CharField(max_length=100, null=False)

class dssv(models.Model):
    id = models.IntegerField(primary_key=True)

class dsclass(models.Model):
    id = models.IntegerField(primary_key=True)
    taikhoan = models.ForeignKey(taikhoan,on_delete=models.CASCADE)


class sinhvien(models.Model):
    mssv = models.CharField(max_length=8,default='',primary_key=True)
    hoten = models.CharField(max_length=100, null=False)
    id = models.ForeignKey(dssv,on_delete= models.CASCADE)





class hocphan(models.Model):
    mahp = models.CharField(max_length=8,default='',primary_key=True)
    tenhp = models.CharField(max_length=100, null=False)


class c_las(models.Model):
    mahp = models.ForeignKey(hocphan, on_delete= models.CASCADE)
    semes = models.IntegerField(default='1', null=False)
    year = models.IntegerField(default='20102011')
    dsclass = models.ForeignKey(dsclass, on_delete= models.CASCADE)







