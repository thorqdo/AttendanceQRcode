from django.contrib import admin
from accounts.models import sinhvien, taikhoan, dsclass, dssv, hocphan, c_las
# Register your models here.

admin.site.register(taikhoan)
admin.site.register(dssv)
admin.site.register(dsclass)
admin.site.register(sinhvien)
admin.site.register(hocphan)
admin.site.register(c_las)