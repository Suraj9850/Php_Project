#Write a Python GUI program to create a label and change the label font style (font
#name, bold, size). Specify separate check button for each style.

from tkinter import *

def changeFont():
    value=c1.get()
    if(value==1):
        l.config(font=("Arial 30"))
    if(value==2):
        l.config(font=("Roman 30"))
def changeSize():
    value=c2.get()
    if(value==1):
        l.config(font=("Roman",60))
    if(value==2):
        l.config(font=("Roman 30"))
def changeStyle():
    value=c3.get()
    if(value==1):
        l.config(font=("Roman Bold",30))
    if(value==2):
        l.config(font=("Roman 30"))
    
root=Tk()
root.geometry("400x500")
root.title("Hello")

l=Label(root,text="Hello",font=("Roman",30))
l.pack()
c1=IntVar()
c2=IntVar()
c3=IntVar()

cb1=Checkbutton(root,text="Change Font",variable=c1,onvalue=1,offvalue=2,command=changeFont)
cb1.pack()
cb2=Checkbutton(root,text="Change Size",variable=c2,onvalue=1,offvalue=2,command=changeSize)
cb2.pack()
cb3=Checkbutton(root,text="Change Style",variable=c3,onvalue=1,offvalue=2,command=changeStyle)
cb3.pack()

root.mainloop()



