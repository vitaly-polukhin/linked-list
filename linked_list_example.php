<?php
/**
 * Represents a node in a linked list.
 */
class LinkedList
{
    /**
     * The data stored in the node.
     *
     * @var mixed
     */
    public $data;

    /**
     * The next node in the linked list.
     *
     * @var LinkedList|null
     */
    public ?LinkedList $next = null;
}

/**
 * Converts a linked list to a string representation.
 *
 * @param LinkedList $node The head of the linked list.
 * @return string The string representation of the linked list.
 */
function linkedListToString(LinkedList $node): string
{
    $values = [];
    while ($node) {
        $values[] = $node->data;
        $node = $node->next;
    }
    return implode(', ', $values);
}

/**
 * Creates a linked list from an array of values.
 *
 * @param array $values The array of values to populate the linked list.
 * @return LinkedList The head of the created linked list.
 */
function initLinkedList(array $values): ?LinkedList
{
    $head = null;
    $tail = null;

    foreach ($values as $value) {
        $node = new LinkedList();
        $node->data = $value;

        if ($head === null) {
            $head = $node;
        } else {
            $tail->next = $node;
        }

        $tail = $node;
    }

    return $head;
}

/**
 * Reverses a linked list.
 *
 * @param LinkedList $list The head of the linked list to reverse.
 * @return LinkedList The new head of the reversed linked list.
 */
function revertLinkedList(LinkedList $list): ?LinkedList
{
    $prev = null;
    while ($list) {
        $next = $list->next;
        $list->next = $prev;
        $prev = $list;
        $list = $next;
    }
    return $prev;
}

$list = initLinkedList([1, 2, 3, 4, 5]);
echo "Initial list: ".linkedListToString($list);
$newList = revertLinkedList($list);
echo PHP_EOL."Reverted list: ".linkedListToString($newList);