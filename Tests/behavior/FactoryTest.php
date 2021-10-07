<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/7 8:36 下午
 */
namespace behavior;

use App\behavior\factory\HpFactory;
use App\behavior\factory\S1TypeOfPhone;
use PHPUnit\Framework\TestCase;

/**
 * @Class   FactoryTest
 * @package behavior
 */
class FactoryTest extends TestCase
{
    /**
     * @Description:    从工厂中获取s1类型的对象
     * @DateTime   :    2021/10/7 8:39 下午
     */
    public function test_get_S1Type_From_HpFactory()
    {
        $hpFactory = new HpFactory();

        $this->assertInstanceOf(S1TypeOfPhone::class,$hpFactory->make("s1"));
    }

    /**
     * @Description:    从s1类型的对象中获取属性值
     * @DateTime   :    2021/10/7 8:50 下午
     */
    public function test_get_attr_val_from_S1Type()
    {
        $hpFactory = new HpFactory();

        $s1TypeOfPhone = $hpFactory->make("s1");

        $this->assertInstanceOf(S1TypeOfPhone::class, $s1TypeOfPhone);

        $this->assertEquals("s1_attr",$s1TypeOfPhone->getAttr());
    }
}