<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mang 1</title>
</head>
    <body>
        <?php
        $schools = array(
            'Students'=> array(
                'SV01'=> array(
                    'name'=>' Phan Văn Cương',
                    'birth'=>'10/11/1988',
                    'gender' =>'Nam'
                ),
                'SV02'=> array(
                    'name'=> 'Nguyễn Văn Hoàng',
                    'birth' => '04/12/1990', 
                    'gender' =>'Nam'
                ),
                'SV03'=> array(
                    'name'=> 'Trân Thị Hằng',
                    'birth' => '01/07/1992', 
                    'gender' =>'Nữ'
                ),
                'SV04'=> array(
                    'name'=> 'Khánh Linh',
                    'birth' => '04/07/1994', 
                    'gender' =>'Nữ'   
                ),
            ),
            'Teacher'=> array(
                'GV01'=> array(
                    'name'=>'Trần Thiện Thành',
                    'birth'=>'04/06/1982',
                    'gender' =>'Nam'
                ),
                'GV02'=> array(
                    'name'=> 'Nguyễn Văn Hiệu',
                    'birth' => '05/10/1981', 
                    'gender' =>'Nam'
                ),
                'GV03'=> array(
                    'name'=> 'Nguyễn Thị Lệ',
                    'birth' => '04/12/1981', 
                    'gender' =>'Nữ'
                ),
            )
        ); 
        ?>
    <div id="content">
        <?php
            foreach ($schools as $k => $v) {
                ?>
                <h1 class = "list_title"> <?php echo $k; ?> </h1>
                <ul class="list_chools">
                    <?php foreach ($v as $k1 => $v1) {
                        ?>
                        <li> 
                            <p><span> MaSV:</span><?php echo $k1; ?> </p>
                            <p><span> Tên:</span><?php echo $v1 ['name'] ?> </p>
                            <p><span> Ngày sinh:</span><?php echo $v1 ['birth'] ?> </p>
                            <p><span> Giới tính:</span><?php echo $v1 ['gender'] ?> </p>
                        </li>
                    <?php }
                    ?>
                </ul>
                <?php
            }
            ?>
        </div>
    </body>
</html>