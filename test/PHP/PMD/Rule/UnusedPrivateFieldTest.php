<?php
/**
 * This file is part of PHP_PMD.
 *
 * PHP Version 5
 *
<<<<<<< HEAD
 * Copyright (c) 2009-2010, Manuel Pichler <mapi@pdepend.org>.
=======
 * Copyright (c) 2009-2010, Manuel Pichler <mapi@phpmd.org>.
>>>>>>> 0.2.x
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Manuel Pichler nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category   PHP
 * @package    PHP_PMD
 * @subpackage Rule
<<<<<<< HEAD
 * @author     Manuel Pichler <mapi@pdepend.org>
=======
 * @author     Manuel Pichler <mapi@phpmd.org>
>>>>>>> 0.2.x
 * @copyright  2009-2010 Manuel Pichler. All rights reserved.
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    SVN: $Id$
 * @link       http://phpmd.org
 */

require_once dirname(__FILE__) . '/../AbstractTest.php';

require_once 'PHP/PMD/Rule/UnusedPrivateField.php';

/**
 * Test case for the unused private field rule.
 *
 * @category   PHP
 * @package    PHP_PMD
 * @subpackage Rule
<<<<<<< HEAD
 * @author     Manuel Pichler <mapi@pdepend.org>
=======
 * @author     Manuel Pichler <mapi@phpmd.org>
>>>>>>> 0.2.x
 * @copyright  2009-2010 Manuel Pichler. All rights reserved.
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    Release: @package_version@
 * @link       http://phpmd.org
 */
class PHP_PMD_Rule_UnusedPrivateFieldTest extends PHP_PMD_AbstractTest
{
    /**
     * testRuleAppliesToUnusedPrivateField
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateField
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleAppliesToUnusedPrivateField()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateField();
        $rule->setReport($this->getReportMock(1));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleAppliesToUnusedPrivateStaticField
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateField
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleAppliesWhenFieldWithSameNameIsAccessedOnDifferentObject()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateField();
        $rule->setReport($this->getReportMock(1));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleAppliesToUnusedPrivateStaticField
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateField
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleAppliesToUnusedPrivateStaticField()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateField();
        $rule->setReport($this->getReportMock(1));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleAppliesWhenStaticFieldWithSameNameIsAccessedOnDifferentClass
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateField
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleAppliesWhenStaticFieldWithSameNameIsAccessedOnDifferentClass()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateField();
        $rule->setReport($this->getReportMock(1));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleAppliesWhenStaticFieldWithSameNameIsAccessedOnParent
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateField
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleAppliesWhenStaticFieldWithSameNameIsAccessedOnParent()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateField();
        $rule->setReport($this->getReportMock(1));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleDoesNotApplyToUnusedPublicField
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateField
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToUnusedPublicField()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateField();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleDoesNotApplyToUnusedProtectedField
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateField
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToUnusedProtectedField()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateField();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleDoesNotApplyToThisAccessedPrivateField
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateField
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToThisAccessedPrivateField()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateField();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleDoesNotApplyToSelfAccessedPrivateField
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateField
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToSelfAccessedPrivateField()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateField();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleDoesNotApplyToStaticAccessedPrivateField
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateField
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToStaticAccessedPrivateField()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateField();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleDoesNotApplyToClassNameAccessedPrivateField
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateField
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToClassNameAccessedPrivateField()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateField();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getClass());
    }
}