<?php

class DrupalPractice_Sniffs_Objects_GlobalDrupalUnitTest extends CoderSniffUnitTest
{


    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @return array(int => int)
     */
    protected function getErrorList($testFile)
    {
        return array();

    }//end getErrorList()


    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @return array(int => int)
     */
    protected function getWarningList($testFile)
    {
        switch ($testFile) {
            case 'GlobalDrupalUnitTest.inc':
                return array(6 => 1);
            case 'ExampleService.php':
                return array(14 => 1);
        }
        print $testFile;

    }//end getWarningList()


    /**
     * Returns a list of test files that should be checked.
     *
     * @return array The list of test files.
     */
    protected function getTestFiles() {
        return [__DIR__.'/GlobalDrupalUnitTest.inc', __DIR__.'/src/ExampleService.php'];
    }

}//end class
