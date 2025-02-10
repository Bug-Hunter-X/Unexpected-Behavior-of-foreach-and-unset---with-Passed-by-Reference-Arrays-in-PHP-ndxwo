# PHP foreach and unset() Bug

This repository demonstrates a subtle bug related to the interaction between PHP's `foreach` loop and the `unset()` function when dealing with arrays passed by reference.  The issue arises because `unset()` modifies the original array, and that modification might affect the iteration in unexpected ways, potentially skipping certain elements.  This leads to inconsistencies and unexpected outcomes in array manipulation. The solution explains how to avoid this by creating a copy of the array before modification.

## Bug Details

In the `bug.php` file, you'll find a function that attempts to remove an element from an array using `unset()` within a `foreach` loop.  However, because arrays are passed by reference by default in PHP, using `unset()` directly within the loop may produce an inconsistent result.  Depending on how the index and the array are modified the resulting array might not match what one would intuitively expect.

## Solution

The `bugSolution.php` file provides a corrected version of the function. It addresses the problem by creating a copy of the input array before iterating over and modifying it. This prevents unintended side effects and ensures consistent behavior when removing elements within a loop.