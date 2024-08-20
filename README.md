# PHP Linked List Implementation

This repository contains a basic implementation of a singly linked list in PHP. The linked list is composed of nodes, each containing data and a reference to the next node in the sequence.

## Classes

### `LinkedList`

Represents a node in a linked list. It contains two properties:

- **`$data`**: The data stored in the node (can be of any type).
- **`$next`**: A reference to the next node in the linked list, or `null` if this is the last node.

## Functions

### `linkedListToString(?LinkedList $node): string`

Converts a linked list to a string representation. This function traverses the linked list starting from the given node and returns a comma-separated string of the node values.

- **Parameters**:
    - `$node` (`?LinkedList`): The head of the linked list.

- **Returns**:
    - `string`: A comma-separated string of the node values.

### `initLinkedList(array $values): ?LinkedList`

Creates a linked list from an array of values. This function initializes a linked list where each value in the array is stored in a node.

- **Parameters**:
    - `$values` (`array`): An array of values to populate the linked list.

- **Returns**:
    - `?LinkedList`: The head of the created linked list, or `null` if the array is empty.

### `revertLinkedList(?LinkedList $list): ?LinkedList`

Reverses a linked list. This function reverses the order of the nodes in the linked list and returns the new head of the list.

- **Parameters**:
    - `$list` (`?LinkedList`): The head of the linked list to reverse.

- **Returns**:
    - `?LinkedList`: The new head of the reversed linked list, or `null` if the list was empty.

## Example Usage

```php
$list = initLinkedList([1, 2, 3, 4, 5]);  // Initialize the linked list with values
$newList = revertLinkedList($list);        // Reverse the linked list
echo linkedListToString($newList);         // Outputs: "5, 4, 3, 2, 1"
