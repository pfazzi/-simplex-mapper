<?php
declare(strict_types=1);

namespace Pfazzi\SimplexMapper\Test;

class ClassWithFields81 {
    public function __construct(
        public Car&Truck $intersectionType
    ) {
    }
}

