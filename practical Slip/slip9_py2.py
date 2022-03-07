#Write Python GUI program to accept a number n and check whether it is Prime,
#Perfect or Armstrong number or not. Specify three radio buttons

from tkinter import *

def arm():
    if radio.get()==3:
        num=no.get()
        temp=num
        s=0
        while temp!=0:
            dig=temp%10
            s=s+dig*dig*dig
            temp=temp//10
        if s==num:
                 label.config(text="No is Armstron")
        else:
             label.config(text="No is not Armstrong")

def prime():
     if radio.get()==1:
        num=no.get()
        j=0
        for i in range(2,num):
            if num%i==0:
                
                label.config(text="No is not prime")
                j=1
                break
            if j==0:
                 label.config(text="No is prime")

def perfect():
    if radio.get()==2:
        num=no.get()
        s=0
        for i in range(1,num):
            if num%i==0:
                s=s+i
                print(s)
            if s==num:
                 label.config(text="No is perfect")
            else:
              label.config(text="No is not perfect")
                
    

root=Tk()
root.geometry("400x600")

no=IntVar()
radio=IntVar()

e=Entry(root,textvariable=no).pack()



r1=Radiobutton(root,text="Prime",variable=radio,value=1,command=prime).pack()
r2=Radiobutton(root,text="Perfect",variable=radio,value=2,command=perfect).pack()
r3=Radiobutton(root,text="Armstrong",variable=radio,value=3,command=arm).pack()

#abel=Label(root).pack()
label = Label(root)
label.pack()



root.mainloop()


