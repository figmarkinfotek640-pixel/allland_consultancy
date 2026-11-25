<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Helpers\TitleHelper;

class TitleHelperTest extends TestCase
{
    public function test_two_tone_splits_with_em_dash(): void
    {
        $input = "Study in Germany — Free Seminar & 1:1 Counselling";
        $expected = "Study in Germany — <span>Free Seminar &amp; 1:1 Counselling</span>";
        $this->assertEquals($expected, TitleHelper::twoTone($input));
    }

    public function test_two_tone_splits_with_colon(): void
    {
        $input = "Complete Guide: Blocked Accounts";
        $expected = "Complete Guide: <span>Blocked Accounts</span>";
        $this->assertEquals($expected, TitleHelper::twoTone($input));
    }

    public function test_two_tone_splits_with_parentheses(): void
    {
        $input = "German Nursing Ausbildung (Stipend Program)";
        $expected = "German Nursing Ausbildung <span>(Stipend Program)</span>";
        $this->assertEquals($expected, TitleHelper::twoTone($input));
    }

    public function test_two_tone_splits_two_word_title(): void
    {
        $input = "Visa Assistance";
        $expected = "Visa <span>Assistance</span>";
        $this->assertEquals($expected, TitleHelper::twoTone($input));
    }

    public function test_two_tone_splits_multi_word_title(): void
    {
        $input = "MSc Automotive & Mechanical Systems";
        $this->assertStringContainsString('<span>', TitleHelper::twoTone($input));
        $this->assertStringContainsString('</span>', TitleHelper::twoTone($input));
    }

    public function test_two_tone_preserves_existing_span(): void
    {
        $input = "Everything You Need, <span>Under One Roof</span>";
        $this->assertEquals($input, TitleHelper::twoTone($input));
    }
}
