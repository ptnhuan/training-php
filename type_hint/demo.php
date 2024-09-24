<?php
declare(strict_types=1);
namespace CheckReturn;

require_once "A.php";
require_once "B.php";
require_once "C.php";
require_once "I.php";

define('EOL', "<br>");

/**
 * Check objects return of types
 */
class D1
{
    public I $i;

    // Type A Return
    /**
     * @return A
     */
    public function d1TypeAReturnA():A
    { // YES
        echo __FUNCTION__ . EOL;
        return new A;
    }

    /**
     * @return A
     */
    public function d1TypeAReturnB():A
    { // No
        echo __FUNCTION__ . EOL;
        return new B;
    }

    /**
     * @return A
     */
    public function d1TypeAReturnC():A
    { // NO
        echo __FUNCTION__ . EOL;
        return new C;
    }

    /**
     * @return A
     */
    public function d1TypeAReturnI(): A
    { // YES
        echo __FUNCTION__ . EOL;
        $this->i = new A();
        return $this->i;
    }

    /**
     * @return A
     */
    public function d1TypeAReturnNull(): A
    { // NO
        echo __FUNCTION__ . EOL;
        return null;
    }

    // Type B Return
    /**
     * @return B
     */
    public function d1TypeBReturnA() : B
    { // NO
        echo __FUNCTION__ . EOL;
        return new A;
    }

    /**
     * @return B
     */
    public function d1TypeBReturnB():B
    { // YES
        echo __FUNCTION__ . EOL;
        return new B;
    }

    /**
     * @return B
     */
    public function d1TypeBReturnC():B
    { // NO
        echo __FUNCTION__ . EOL;
        return new C;
    }

    /**
     * @return B
     */
    public function d1TypeBReturnI():B
    { // YES
        echo __FUNCTION__ . EOL;
        $this->i = new B();
        return $this->i;
    }

    /**
     * @return B
     */
    public function d1TypeBReturnNull(): B
    { // NO
        echo __FUNCTION__ . EOL;
        return null;
    }

    // Type C Return
    /**
     * @return C
     */
    public function d1TypeCReturnA():C
    { // YES
        echo __FUNCTION__ . EOL;
        return new A;
    }

    /**
     * @return C
     */
    public function d1TypeCReturnB():C
    { // YES
        echo __FUNCTION__ . EOL;
        return new B;
    }

    /**
     * @return C
     */
    public function d1TypeCReturnC():C
    { // YES
        echo __FUNCTION__ . EOL;
        return new C;
    }

    /**
     * @return C
     */
    public function d1TypeCReturnI():C
    { // YES
        echo __FUNCTION__ . EOL;
        $this->i = new C();
        return $this->i;
    }

    /**
     * @return C
     */
    public function d1TypeCReturnNull():C
    { // NO
        echo __FUNCTION__ . EOL;
        return null;
    }

    // Type I Return
    /**
     * @return I
     */
    public function d1TypeIReturnA():I
    { // YES
        echo __FUNCTION__ . EOL;
        return new A;
    }

    /**
     * @return I
     */
    public function d1TypeIReturnB():I
    { // YES
        echo __FUNCTION__ . EOL;
        return new B;
    }

    /**
     * @return I
     */
    public function d1TypeIReturnC():I
    { // YES
        echo __FUNCTION__ . EOL;
        return new C;
    }

    /**
     * @return I
     */
    public function d1TypeIReturnI():I
    { // ...
        echo __FUNCTION__ . EOL;
        $this->i = new C();
        return $this->i;
    }

    /**
     * @return I
     */
    public function d1TypeIReturnNull():I
    { // NO
        echo __FUNCTION__ . EOL;
        return null;
    }
}

/**
 * Call methods of returned objects
 */
class D2
{
    public I $i;
    public D1 $d1;
    public object $className;

    public function __construct()
    {
        $this->d1 = new D1();
    }

    // Call method of object return from type A
    /**
     * @return void
     */
    public function d2TypeAReturnA()
    {
        echo __FUNCTION__ . EOL;
        $this->i = $this->d1->d1TypeAReturnA();
        $this->i->f();
        $this->i->a1();
        $this->i->b1();
    }

    /**
     * @return void
     */
    public function d2TypeAReturnI()
    {
        echo __FUNCTION__ . EOL;
        $this->i = $this->d1->d1TypeAReturnI();
        $this->i->f();
        $this->i->a1();
        $this->i->b1();
    }

    // Call method of object return from type B
    /**
     * @return void
     */
    public function d2TypeBReturnB()
    {
        echo __FUNCTION__ . EOL;
        $this->i = $this->d1->d1TypeBReturnB();
        $this->i->f();
        $this->i->b1();
        $this->i->a1();
    }

    /**
     * @return void
     */
    public function d2TypeBReturnI()
    {
        echo __FUNCTION__ . EOL;
        $this->i = $this->d1->d1TypeBReturnI();
        $this->i->f();
        $this->i->b1();
        $this->i->a1();
    }

    // Call method of object return from type C
    /**
     * @return void
     */
    public function d2TypeCReturnA()
    {
        echo __FUNCTION__ . EOL;
        $this->i = $this->d1->d1TypeCReturnA();
        $this->i->f();
        $this->i->a1();
        $this->i->b1();
    }

    /**
     * @return void
     */
    public function d2TypeCReturnB()
    {
        echo __FUNCTION__ . EOL;
        $this->i = $this->d1->d1TypeCReturnB();
        $this->i->f();
        $this->i->a1();
        $this->i->b1();
    }

    /**
     * @return void
     */
    public function d2TypeCReturnC()
    {
        echo __FUNCTION__ . EOL;
        $this->i = $this->d1->d1TypeCReturnC();
        $this->i->f();
        $this->i->a1();
        $this->i->b1();
    }

    /**
     * @return void
     */
    public function d2TypeCReturnI()
    {
        echo __FUNCTION__ . EOL;
        $this->i = $this->d1->d1TypeCReturnI();
        $this->i->f();
        $this->i->a1();
        $this->i->b1();
    }

    // Call method of object return from type I
    /**
     * @return void
     */
    public function d2TypeIReturnA()
    {
        echo __FUNCTION__ . EOL;
        $this->i = $this->d1->d1TypeIReturnA();
        $this->i->f();
        $this->i->a1();
        $this->i->b1();
    }

    /**
     * @return void
     */
    public function d2TypeIReturnB()
    {
        echo __FUNCTION__ . EOL;
        $this->i = $this->d1->d1TypeIReturnB();
        $this->i->f();
        $this->i->a1();
        $this->i->b1();
    }

    /**
     * @return void
     */
    public function d2TypeIReturnC()
    {
        echo __FUNCTION__ . EOL;
        $this->i = $this->d1->d1TypeIReturnC();
        $this->i->f();
        $this->i->a1();
        $this->i->b1();
    }

    /**
     * @return void
     */
    public function d2TypeIReturnI()
    {
        echo __FUNCTION__ . EOL;
        $this->i = $this->d1->d1TypeIReturnI();
        $this->i->f();
        $this->i->a1();
        $this->i->b1();
    }
}

$d1 = new D1();
$d2 = new D2();

//Check return of types
//A
//$d1->d1TypeAReturnA(); //Yes
//$d1->d1TypeAReturnB(); //No
//$d1->d1TypeAReturnC(); //No
//$d1->d1TypeAReturnI(); //Yes
//$d1->d1TypeAReturnNull(); //No

//B
//$d1->d1TypeBReturnA(); //No
//$d1->d1TypeBReturnB(); //Yes
//$d1->d1TypeBReturnC(); //No
//$d1->d1TypeBReturnI(); //Yes
//$d1->d1TypeBReturnNull(); //No

//C
//$d1->d1TypeCReturnA(); //Yes
//$d1->d1TypeCReturnB(); //Yes
//$d1->d1TypeCReturnC(); //Yes
//$d1->d1TypeCReturnI(); //Yes
//$d1->d1TypeCReturnNull(); //No

//I
//$d1->d1TypeIReturnA(); //Yes
//$d1->d1TypeIReturnB(); //Yes
//$d1->d1TypeIReturnC(); //Yes
//$d1->d1TypeIReturnI(); //...
//$d1->d1TypeIReturnNull(); //No

//Call methods of return objects (Only 'Yes' cases)
//A
//$d2->d2TypeAReturnA(); //f, a1
//$d2->d2TypeAReturnI(); //f, a1

//B
//$d2->d2TypeBReturnB(); //f, b1
//$d2->d2TypeBReturnI(); //f, b1

//C
//$d2->d2TypeCReturnA(); //f, a1
//$d2->d2TypeCReturnB(); //f, b1
//$d2->d2TypeCReturnC(); //f
//$d2->d2TypeCReturnI(); //f

//I
//$d2->d2TypeIReturnA(); //f, a1
//$d2->d2TypeIReturnB(); //f, b1
//$d2->d2TypeIReturnC(); //f
