// https://github.com/elarity/data-structure-php-clanguage/blob/master/6.%E6%95%B0%E6%8D%AE%E7%BB%93%E6%9E%84%E4%B9%8B%E6%A0%88.md
// Data Structure Stack.
<?php
    // Abstracts a node into a node class with data and next attributes
class Node
{
    public $data = null;
    public $next = null;
    public function __construct($data = null)
    {
        $this->data = $data;
    }
}

// single liked list storage
class Linked_sq{
    private $head = null;
    public function __construct()
    {
        // Add a header node
        $this->head = new Node();
    }
    
    // Gets the length of a single linked list
    public function get_length()
    {
        // Note that the gead nodes are not included in the lenth of the list.
        $length = 0;
        $head = $this->head;
        while ($head->next) {
            $head = $head->next;
            $length++;
        }
        return $length;
    }
    // @desc: Add a node, @para: index, @para: item
    public function add_item($index, $item)
    {
        $length = $this->get_length();
        if ($index < 0 || $index > $length) {
            return false;
        }
        
        // acquisition of head node
        $head = $this->head;
        for ($i = 0; $i < $index; $i++) {
            $head = $head->next;
        }
        
        // Initialize a new node
        $node = new Node($item);
        $node->next = $head->next;
        $head->next = $node;
        return true;
    }
    
    public function delete_item($index)
    {
        $length = $this->get_length();
        if ($index < 0 || $index > $length) {
            return null;
        }
        $head = $this->head;
        // I'm going to delete the node at the index location, starting at 0 and looking for it all the way to the index, but
        // When the loop ends, the selected node is the node in the index-1 position
        for ($i = 0; $i < $index; $i++) {
            $head = $head->next;
        }
        
        // This is the node to be deleted.
        $delete_node = $head->next;
        $value = $delete_node->data;
        
        // Modify pointer pointing
        $head->next = $head->next->next;
        
        // delete node
        unset($delete_node);
        return $value;
    }
    
    // @desc: Finds a value at a location
    // @param: index
    
    public function get_item_by_index($index)
    {
        $length = $this->get_length();
        if ($index < 0 || $index > $length) {
            return null;
        }
        $head = $this->head;
        // Notice the termination condition here, where you get the node at index-1 posioned
        for ($i = 0; $i < $index; $i++) {
            $head = $head->next;
        }
        return $head->next->data;
    }
    
    // @desc : Empty the entire single list
    
    public function truncate()
    {
        // The first node, the head node.
        $head = $this->head;
        while ($head->next) {
            $temp = $head->next;
            unset($head->next);
            $head = $temp;
        }
        return true;
    }
    
    // @desc: Pop method for stack
    public function pop()
    {
        $length = $this->get_length();
        return $this->delete_item($length - 1);
    }
    
    // @desc: Push method for stack
    
    public function push($item)
    {
        $length = $this->get_length();
        $this->add_item($length, $item);
    }
}

$link = new Linked_sq();
echo '1. The initial length of a single linked list is : '.$link->get_length().PHP_EOL;
function nl($string) {
    if(isset($_SERVER['SHELL'])) return preg_replace('/\<br(\s*)?\/?>/i', PHP_EOL, $string);
    return nl2br($string);
}
print nl("----------------------------------\n".PHP_EOL);

// Add a node
$link->push(9);
echo '2. The length of a single linked list length : '.$link->get_length().PHP_EOL;
$link->push(1);
$link->push(2);
$link->push(5);

print nl("----------------------------------\n".PHP_EOL);
print nl("\n".PHP_EOL);
echo '3. The lenth of a single linked list lenth : '.$link->get_length().PHP_EOL;
print nl("----------------------------------\n".PHP_EOL);
print nl("----------------------------------\n".PHP_EOL);
echo '4. In the second position: '.$link->get_item_by_index(1).PHP_EOL;
print nl("----------------------------------\n".PHP_EOL);
$link->pop();
echo '5. The length of a single linked list length : '.$link->get_length().PHP_EOL;
?>
