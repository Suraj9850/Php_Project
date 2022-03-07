#Write Python GUI program to create background with changing colors
from tkinter import *

def change():
    value=c.get()
    root.configure(background=value)

root=Tk()
root.geometry("400x500")
root.configure(background="Blue")
l=Label(root,text="Enter the color:").pack()
c=StringVar()
color=Entry(root,textvariable=c).pack()
Button(root,text="Submit",command=change).pack()
root.mainloop()
