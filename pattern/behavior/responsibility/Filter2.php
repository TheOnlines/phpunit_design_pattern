<?php
/**
 * @className:
 * @User: zw
 * @DateTime: 2021/10/4 10:26 上午
 */

namespace App\behavior\responsibility;


use PHPUnit\Framework\MockObject\MockObject;

class Filter2 implements Responsibility
{
    /**
     * @var Responsibility|MockObject|null
     */
    private Responsibility|null|MockObject $nextResponsibility;

    /**
     * @Description:
     * @DateTime:    2021/10/4 10:26 上午
     * @param Responsibility|MockObject|null $responsibility
     * @return bool
     */
    public function setResponsibility(Responsibility|MockObject|null $responsibility): bool
    {
        $this->nextResponsibility = $responsibility;

        return true;
    }

    /**
     * @Description:
     * @DateTime:    2021/10/4 10:26 上午
     * @param string $msg
     * @return string
     */
    public function handle(string $msg): string
    {
        $msg = str_replace("很丑","",$msg);

        if ($this->nextResponsibility != null) {
            return $this->nextResponsibility->handle($msg);
        }

        return $msg;
    }
}