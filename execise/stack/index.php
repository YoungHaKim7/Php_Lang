// https://github.com/elarity/data-structure-php-clanguage/blob/master/6.%E6%95%B0%E6%8D%AE%E7%BB%93%E6%9E%84%E4%B9%8B%E6%A0%88.md
// 6.Data Structure Stack.

<?php
// 将结点抽象成一个node class，具备data和next两个属性
// Abstracts a node into a node class with data and next attributes
class Node{
  public $data = null;
  public $next = null;
  public function __construct( $data = null ){
    $this->data = $data;
  }
}
// 单链表的存储
// single linked list storage
class Linked_sq{
  private $head = null;
  public function __construct(){
    // 添加一个头结点
    // Add a header node
    $this->head = new Node(); 
  }
  /*
   * @desc : 获取单链表长度
    * @desc: Gets the length of a single linked list
   */
  public function get_length(){
    // 注意 头结点 不算在单链表的长度内
    // Note that the head nodes are not included in the length of the list.
    $length = 0;
    $head = $this->head;
    while( $head->next ){
      $head = $head->next; 
      $length++;
    }
    return $length;
  }
  /*
   * @desc : 添加一个结点
    * @desc: Add a node
   * @param : index
   * @param : item 
   */
  public function add_item( $index, $item ){
    $length = $this->get_length(); 
    if( $index < 0 || $index > $length ){
      return false;
    }
    // 获取头结点
    // acquisition of head node
    $head = $this->head;
    for( $i = 0; $i < $index; $i++){
      $head = $head->next;
    }
    // 初始化一个新结点
    // Initialize a new node
    $node = new Node( $item ); 
    $node->next = $head->next;
    $head->next = $node; 
    return true;
  }
  /*
   * @desc : 删除一个结点
    * @desc: Delete a node
   * @param : index
   */
  public function delete_item( $index ){
    $length = $this->get_length();
    if( $index < 0 || $index > $length ){
      return null;
    } 
    $head = $this->head; 
    // 这里循环的终止条件一定要想明白了，我要删除index位置上的结点，从0开始寻找一直到index这个结点，但是
    // I'm going to delete the node at the index location, starting at 0 and looking for it all the way to the index, but
    // 当循环终止的时候，被选中的结点是 index - 1 位置上的结点
    // When the loop ends, the selected node is the node in the index-1 position
    for( $i = 0; $i < $index; $i++ ){
      $head = $head->next; 
    }
    // 这个才是要被删除的结点
    // This is the node to be deleted.
    $delete_node = $head->next;  
    $value = $delete_node->data;
    // 修改指针指向
    // Modify pointer pointing
    $head->next = $head->next->next;
    // 删除结点
    // delete node
    unset( $delete_node );
    return $value;
  }
  /*
   * @desc : 查找某个位置上的数值 
    * @desc: Finds a value at a location
   * @param : index
   */
  public function get_item_by_index( $index ){
    $length = $this->get_length(); 
    if( $index < 0 || $index > $length ){
      return null;
    }
    $head = $this->head;
    // 注意这里终止条件，这里获取到的是 index-1 位置上的结点
    // Notice the termination condition here, where you get the node at index-1 positioned
    for( $i = 0; $i < $index; $i++ ){
      $head = $head->next;
    } 
    return $head->next->data;
  }
  /*
   * @desc : 清空整个单链表
    * @desc: Empty the entire single list
   */
  public function truncate(){
    // 第一个结点,就是头结点
    // The first node, the head node.
    $head = $this->head;
    while( $head->next ){
      $temp = $head->next;
      unset( $head->next );
      $head = $temp;
    }
    return true;
  }
  /*
   * @desc : 栈的pop方法
    * @desc: Pop method for stack
   */
  public function pop(){
    $length = $this->get_length();
    return $this->delete_item( $length - 1 );
  }
  /*
   * @desc : 栈的push方法
    * @desc: Push method for stack
   */
  public function push( $item ){
    $length = $this->get_length();
    $this->add_item( $length, $item );
  }
}
$link = new Linked_sq();
echo '单链表初始长度为：'.$link->get_length().PHP_EOL;
echo '1. The initial length of a single linked list is : '.$link->get_length().PHP_EOL;
function nl($string) {
  if(isset($_SERVER['SHELL'])) return preg_replace('/\<br(\s*)?\/?\>/i', PHP_EOL, $string);
  return nl2br($string);
}
print nl("------------------\n" . PHP_EOL);

// 添加一个结点
// Add a node
$link->push( 9 );
echo '单链表长度为：'.$link->get_length().PHP_EOL;
echo '2. The length of a single linked list length : '.$link->get_length().PHP_EOL;
$link->push( 1 );
$link->push( 2 );
$link->push( 5 );
print nl("------------------\n" . PHP_EOL);
print nl("\n" . PHP_EOL);
echo '单链表长度为：'.$link->get_length().PHP_EOL;
echo '3. The length of a single linked list length : '.$link->get_length().PHP_EOL;
print nl("------------------\n" . PHP_EOL);
echo '第二个位置上的：'.$link->get_item_by_index( 1 ).PHP_EOL;
echo '4. In the second position: '.$link->get_item_by_index( 1 ).PHP_EOL;
print nl("------------------\n" . PHP_EOL);
$link->pop();
echo '单链表长度为：'.$link->get_length().PHP_EOL;
echo '5. The length of a single linked list length : '.$link->get_length().PHP_EOL;
?>