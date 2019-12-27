#!/usr/bin/env python3

array=[]
def getSum():
  return sum(array)
def getInput(n):
  print("Hit enter after input the next number")
  for i in range(0,n):
    numbers=int(input())
    array.append(numbers)

length=int(input('Enter the length of the array'))
getInput(length)

print("The sum of the numbers in the array is\n",getSum())