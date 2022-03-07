#Write python GUI program to generate a random password with upper and lower case letters.

from tkinter import *
import random
import string

def change():
    letter=string.ascii_lowercase+string.ascii_uppercase
    pasw=''.join((random.choice(letter))   for i in range(8))
    pas.set(pasw)

root=Tk()
root.geometry("400x655")
root.title("Password")
pas=StringVar()
e=Entry(root,textvariable=pas).pack()
Button(root,text="Click",command=change).pack()
root.mainloop()
