# TrienKhaiInterfaceComparableChoCacLopHinhHoc
Bước 1: Lớp Circle: Tạo mới một tệp với tên Circle.php

<?php

class Circle
{
    public $radius;
    public $name;

    public function __construct($name, $radius)
    {
        $this->radius = $radius;
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
}
Bước 2:  interface Comparable: Tạo mới tệp với tên Comparable.php

<?php

interface Comparable
{
    public function compareTo($objOther);
}
Bước 3: Tạo một lớp ComparableCircle kế thừa lớp Circle, triển khai interface Comparable:

<?php

include "Circle.php";
include "Comparable.php";

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($circleOther)
    {
        $circleOtherRadius = $circleOther->getRadius();

        if ($this->getRadius() > $circleOtherRadius) {
            return 1;
        }  else if($this->getRadius() < $circleOtherRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}
Bước 4: chương trình chạy thử ComparableCircleMain: Tạo mới tệp với tên ComparableCircleMain.php


include "ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 2);

var_dump($circleOne->compareTo($circleTwo));
Chạy chương trình và quan sát kết quả.

Mã nguồn tham khảo: https://github.com/codegym-vn/php-interface-comparable
