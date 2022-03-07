#Write Python GUI program to create a digital clock with Tkinter to display the time

from tkinter import *
from tkinter.ttk import *
from time import strftime

root=Tk()
root.title("Timer")


lb=Label(root)
lb.pack(anchor='center')


def time():
    string=strftime('%H:%M:%S %p')
    lb.config(text=string)
    lb.after(1000,time)

time()
mainloop()
