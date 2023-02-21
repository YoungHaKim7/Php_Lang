#include <stdio.h>

#define TRUE 1
#define FALSE 0
#define ERROR -1
#define SQ_SIZE 6

typedef struct seq_list {
  int element_array[SQ_SIZE];
  int length;
} seq_list;

int create_element(int, int, seq_list * );

int main(void) {
  // declare a linear table
  seq_list sq;
  sq.length = 0;
  create_element(1, 1, &sq);
  printf("Hello, World!");
  return 0;
}

/*
 @desc: index is still the natural position length
         Element is what you're going to get worth.
         sq is a pointer type variable for a linear table element
 */
int create_element(int index, int element, seq_list *sq) {
  if (index > SQ_SIZE || index < 0) {
    return ERROR;
  }
  // If the linear table is full, error.
  if (SQ_SIZE == sq->length) {
    return ERROR;
  }
  int array_index = index - 1;
  if (0 == sq->length) {
    sq->element_array[array_index] = element;
    sq->length++;
  } else {
    // Current rightmost element position of linear table
    int array_right = sq->length - 1;
    // It's disgusting!
    for (; array_right >= array_index; array_right--) {
      int temp = sq->element_array[array_right];
      sq->element_array[array_right + 1] = temp;
    }
    // Do you know how to do atomic operations here by adding the element and
    // adding the length?
    sq->element_array[array_index] = element;
    sq->length++;
  }
  return TRUE;
}

/*
 @desc : index is the natural location,
         The anti-human kind that starts at zero in the non-exponential group.Location
         One is number one, and we don't accept bar refutation.
         Who's going to kill who's going to kill him.
 */
