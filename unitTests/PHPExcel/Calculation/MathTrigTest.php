<?php


require_once 'testDataFileIterator.php';

class MathTrigTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        if (!defined('PHPEXCEL_ROOT'))
        {
            define('PHPEXCEL_ROOT', APPLICATION_PATH . '/');
        }
        require_once(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');
	}

    /**
     * @dataProvider providerATAN2
     */
	public function testATAN2()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','ATAN2'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerATAN2()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/ATAN2.data');
	}

    /**
     * @dataProvider providerCEILING
     */
	public function testCEILING()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','CEILING'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerCEILING()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/CEILING.data');
	}

    /**
     * @dataProvider providerCOMBIN
     */
	public function testCOMBIN()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','COMBIN'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerCOMBIN()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/COMBIN.data');
	}

    /**
     * @dataProvider providerEVEN
     */
	public function testEVEN()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','EVEN'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerEVEN()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/EVEN.data');
	}

    /**
     * @dataProvider providerODD
     */
	public function testODD()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','ODD'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerODD()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/ODD.data');
	}

    /**
     * @dataProvider providerFACT
     */
	public function testFACT()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','FACT'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerFACT()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/FACT.data');
	}

    /**
     * @dataProvider providerFACTDOUBLE
     */
	public function testFACTDOUBLE()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','FACTDOUBLE'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerFACTDOUBLE()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/FACTDOUBLE.data');
	}

    /**
     * @dataProvider providerFLOOR
     */
	public function testFLOOR()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','FLOOR'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerFLOOR()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/FLOOR.data');
	}

    /**
     * @dataProvider providerGCD
     */
	public function testGCD()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','GCD'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerGCD()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/GCD.data');
	}

    /**
     * @dataProvider providerLCM
     */
	public function testLCM()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','LCM'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerLCM()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/LCM.data');
	}

    /**
     * @dataProvider providerINT
     */
	public function testINT()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','INT'),$args);
		$this->assertEquals($expectedResult, $result);
	}

    public function providerINT()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/INT.data');
	}

    /**
     * @dataProvider providerSIGN
     */
	public function testSIGN()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','SIGN'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerSIGN()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/SIGN.data');
	}

    /**
     * @dataProvider providerPOWER
     */
	public function testPOWER()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','POWER'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerPOWER()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/POWER.data');
	}

    /**
     * @dataProvider providerLOG
     */
	public function testLOG()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','LOG_BASE'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerLOG()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/LOG.data');
	}

    /**
     * @dataProvider providerMOD
     */
	public function testMOD()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','MOD'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerMOD()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/MOD.data');
	}

    /**
     * @dataProvider providerMDETERM
     */
	public function testMDETERM()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','MDETERM'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerMDETERM()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/MDETERM.data');
	}

    /**
     * @dataProvider providerMINVERSE
     */
	public function testMINVERSE()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','MINVERSE'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerMINVERSE()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/MINVERSE.data');
	}

    /**
     * @dataProvider providerMMULT
     */
	public function testMMULT()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','MMULT'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerMMULT()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/MMULT.data');
	}

    /**
     * @dataProvider providerMROUND
     */
	public function testMROUND()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		PHPExcel_Calculation::setArrayReturnType(PHPExcel_Calculation::RETURN_ARRAY_AS_VALUE);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','MROUND'),$args);
		PHPExcel_Calculation::setArrayReturnType(PHPExcel_Calculation::RETURN_ARRAY_AS_ARRAY);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerMROUND()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/MROUND.data');
	}

    /**
     * @dataProvider providerROUNDUP
     */
	public function testROUNDUP()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','ROUNDUP'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerROUNDUP()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/ROUNDUP.data');
	}

    /**
     * @dataProvider providerROUNDDOWN
     */
	public function testROUNDDOWN()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','ROUNDDOWN'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerROUNDDOWN()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/ROUNDDOWN.data');
	}

    /**
     * @dataProvider providerTRUNC
     */
	public function testTRUNC()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','TRUNC'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerTRUNC()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/TRUNC.data');
	}

    /**
     * @dataProvider providerROMAN
     */
	public function testROMAN()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','ROMAN'),$args);
		$this->assertEquals($expectedResult, $result);
	}

    public function providerROMAN()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/ROMAN.data');
	}

    /**
     * @dataProvider providerSQRTPI
     */
	public function testSQRTPI()
	{
		$args = func_get_args();
		$expectedResult = array_pop($args);
		$result = call_user_func_array(array('PHPExcel_Calculation_MathTrig','SQRTPI'),$args);
		$this->assertEquals($expectedResult, $result, NULL, 1E-12);
	}

    public function providerSQRTPI()
    {
    	return new testDataFileIterator('rawTestData/Calculation/MathTrig/SQRTPI.data');
	}

}
