<?php
/******************************************************************************
 * Copyright 2017 Okta, Inc.                                                  *
 *                                                                            *
 * Licensed under the Apache License, Version 2.0 (the "License");            *
 * you may not use this file except in compliance with the License.           *
 * You may obtain a copy of the License at                                    *
 *                                                                            *
 *      http://www.apache.org/licenses/LICENSE-2.0                            *
 *                                                                            *
 * Unless required by applicable law or agreed to in writing, software        *
 * distributed under the License is distributed on an "AS IS" BASIS,          *
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.   *
 * See the License for the specific language governing permissions and        *
 * limitations under the License.                                             *
 ******************************************************************************/

use PHPUnit\Framework\TestCase;

class EnumTest extends TestCase
{
    /** @test */
    public function values_are_retrievable()
    {
        $monday = new DaysOfWeek(DaysOfWeek::MONDAY);
        $this->assertEquals(DaysOfWeek::MONDAY, $monday->getValue());
    }

    /**
     * @test
     */
    public function invalid_values_will_throw_exception()
    {
        $this->expectException('BadMethodCallException');
         DaysOfWeek::BAD();
    }

    /** @test */
    public function can_get_key_from_enum()
    {
        $monday = new DaysOfWeek(DaysOfWeek::MONDAY);
        $this->assertEquals('MONDAY', $monday->getKey());
    }

    /** @test */
    public function will_render_as_a_string()
    {
        $monday = new DaysOfWeek(DaysOfWeek::MONDAY);
        $this->assertEquals('Monday', $monday);
    }

    /** @test */
    public function all_keys_can_be_returned()
    {
        $keys = DaysOfWeek::keys();

        $this->assertCount(7, $keys);
        $this->assertEquals([
            'SUNDAY','MONDAY','TUESDAY','WEDNESDAY','THURSDAY','FRIDAY','SATURDAY'
        ], $keys);
    }

    /** @test */
    public function all_values_can_be_returned()
    {
        $values = DaysOfWeek::values();

        $this->assertCount(7, $values);
        $this->assertEquals([
            'SUNDAY' => new DaysOfWeek(DaysOfWeek::SUNDAY),
            'MONDAY' => new DaysOfWeek(DaysOfWeek::MONDAY),
            'TUESDAY' => new DaysOfWeek(DaysOfWeek::TUESDAY),
            'WEDNESDAY' => new DaysOfWeek(DaysOfWeek::WEDNESDAY),
            'THURSDAY' => new DaysOfWeek(DaysOfWeek::THURSDAY),
            'FRIDAY' => new DaysOfWeek(DaysOfWeek::FRIDAY),
            'SATURDAY' => new DaysOfWeek(DaysOfWeek::SATURDAY)
        ], $values);
    }

    /** @test */
    public function can_be_converted_to_array()
    {
        $array = DaysOfWeek::toArray();

        $this->assertCount(7, $array);
        $this->assertEquals([
            'SUNDAY' => new DaysOfWeek(DaysOfWeek::SUNDAY),
            'MONDAY' => new DaysOfWeek(DaysOfWeek::MONDAY),
            'TUESDAY' => new DaysOfWeek(DaysOfWeek::TUESDAY),
            'WEDNESDAY' => new DaysOfWeek(DaysOfWeek::WEDNESDAY),
            'THURSDAY' => new DaysOfWeek(DaysOfWeek::THURSDAY),
            'FRIDAY' => new DaysOfWeek(DaysOfWeek::FRIDAY),
            'SATURDAY' => new DaysOfWeek(DaysOfWeek::SATURDAY)
        ], $array);
    }

    /** @test */
    public function can_check_if_value_is_valid_enum()
    {
        $valid = 'Monday';
        $invalid = 'Invalid';

        $this->assertTrue(DaysOfWeek::isValid($valid));
        $this->assertFalse(DaysOfWeek::isValid($invalid));
    }

    /** @test */
    public function can_check_if_key_is_valid_on_enum()
    {
        $valid = 'MONDAY';
        $invalid = 'INVALID';
        $invalid2 = 'Monday';

        $this->assertTrue(DaysOfWeek::isValidKey($valid));
        $this->assertFalse(DaysOfWeek::isValidKey($invalid));
        $this->assertFalse(DaysOfWeek::isValidKey($invalid2));
    }

    /** @test */
    public function can_search_for_key_based_on_value()
    {
        $this->assertEquals(
            (new DaysOfWeek(DaysOfWeek::MONDAY))->getKey(),
            DaysOfWeek::search('Monday')
        );
    }

    /** @test */
    public function can_call_enum_method()
    {
         $monday = DaysOfWeek::MONDAY();

         $this->assertTrue($monday->isStartOfWeek());
    }

    /**
     * @test
     */
    public function will_throw_exception_if_method_does_not_exist_for_enum()
    {
        $this->expectException('BadMethodCallException');
        $tuesday = DaysOfWeek::TUESDAY();

        $this->assertTrue($tuesday->isStartOfWeek());
    }

    /** @test */
    public function able_to_handle_wildcard_methods_for_enums()
    {
         $sunday = DaysOfWeek::SUNDAY();
         $monday = DaysOfWeek::MONDAY();

         $this->assertFalse($sunday->isWorkDay());
         $this->assertTrue($monday->isWorkDay());
    }

    /** @test */
    public function can_handle_multiple_word_enums()
    {
        $enum = MultiWordEnum::MULTI_WORD_ENUM();

        $this->assertEquals('Multiple Word Enum', $enum->getValue());

        $this->assertTrue($enum->testFunction());

        $this->assertFalse($enum->alwaysFalseExceptSomethingElse());
        $this->assertTrue((MultiWordEnum::SOMETHING_ELSE())->alwaysFalseExceptSomethingElse());

    }


    /**
     * @test
     */
    public function throws_exception_if_created_without_valid_value()
    {
        $this->expectException('UnexpectedValueException');
        new MultiWordEnum('FOO_BAR');
    }






}

class MultiWordEnum extends \Okta\Utilities\Enum
{
    const MULTI_WORD_ENUM = 'Multiple Word Enum';
    const SOMETHING_ELSE = 'Foo Bar';

    public function multiWordEnumTestFunction()
    {
        return true;
    }

    public function alwaysFalseExceptSomethingElse()
    {
        if($this->getKey() == 'SOMETHING_ELSE')
        {
            return true;
        }
        return false;
    }
}

/**
 * Class DaysOfWeek
 *
 * @method static DaysOfWeek SUNDAY()
 * @method static DaysOfWeek MONDAY()
 * @method static DaysOfWeek TUESDAY()
 * @method static DaysOfWeek WEDNESDAY()
 * @method static DaysOfWeek THURSDAY()
 * @method static DaysOfWeek FRIDAY()
 * @method static DaysOfWeek SATURDAY()
 *
 */
class DaysOfWeek extends \Okta\Utilities\Enum
{
    const SUNDAY = "Sunday";
    const MONDAY = "Monday";
    const TUESDAY = "Tuesday";
    const WEDNESDAY = "Wednesday";
    const THURSDAY = "Thursday";
    const FRIDAY = "Friday";
    const SATURDAY = "Saturday";

    public function mondayIsStartOfWeek()
    {
        return true;
    }

    public function isWorkDay()
    {
        switch($this->getKey()) {
            case 'SUNDAY':
            case 'SATURDAY':
                return false;
            default:
                return true;
        }
    }
}
