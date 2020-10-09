## Luồng - follow
Với một project PHP lập trình theo mô hình MVC tất cả các request sẽ gửi đến file **index.php**. File index.php có nhiệm vụ phân luồng reqest (Xét xem với reqest nhân được thì sẽ thực hiện Controller và method nào - xem file index.php để rõ hơn). 

Cụ thể, trước đây khi lập trình hướng chức năng, thì ta sẽ truy cập thằng vào tên file vd: http://localhost/users/create.php. Nhưng với MVC, chúng ta sẽ chỉ truy cập vào http://localhost/index.php?act=users/create. Lúc này file index.php sẽ tìm controller là UserController và gọi tới method là create. 
 

## Config database connection
Config database connection trong file config/constants.php

## Quy ước đặt tên

- Controller: Tên controller PHẢI viết hoa chữ cái đầu tiên mỗi từ và có hậu tố là "Controller". Tên file phải trùng với tên class. Vd AuthController, UserController, StudentController. 
- Model: Tên model PHẢI viết hoa chữ cái đầu tiên mỗi từ. (Có thể thêm hậu tố là "Model"). VD StudentModel, UserModel, ...
- View: Các file view PHẢI viết thường, các từ cách nhau bằng dấu "-", VD: home.php, user.php, create-student.php 

