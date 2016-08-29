<?php
class models_modelCart extends core_model
{
	public function run()
    {
        $str = $this->getString();
        $PreCrash = $this->stringToArr($str);
        $mapped = $this->mapping($PreCrash);
        $sorted = $this->sorting($mapped);
        $unmapped = $this->unmapping($sorted);
        $sortedString = $this->arrToString($unmapped);
        return $sortedString;
	}
    function getString()
    {
        return $_POST['textOfCards'];
        
    }
    function stringToArr($str)
    {
        return explode(",", $str);
    }

    function mapping($PreCrash)
    {
        return  str_replace (array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A', '1'),
            array('b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'a'),
            $PreCrash);
    }

    function unmapping($sorted)
    {
        return  str_replace(array('b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'a'),
            array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A', '1'),
            $sorted);
    }

    function sorting($mapped)
    {
        if ($_POST['answer'] == up){
            asort($mapped);
        }
        else {
            arsort($mapped);
        }
        return $mapped;
    }

    function arrToString($unmapped)
    {
        return implode(",", $unmapped);
    }
    
}
