#Write a python script to generate Fibonacci terms using generator function.

def genrate(no):
    print(0,end="  ")
    a=0
    b=1
    for i in range(no-1):
        print(b,end="  ")
        a,b=b,a+b

n=int(input("Enter the no:"))
genrate(n)
