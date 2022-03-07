from tkinter import *

from time import strftime



root=Tk()


l=Label(root)
l.pack()

def time():
    string=strftime('%H:%M:%S %p')
    l.config(text=string)
    l.after(1000,time)
    
time()

root.mainloop()
