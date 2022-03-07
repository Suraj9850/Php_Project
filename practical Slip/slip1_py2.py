#Write Python GUI program to take accept your birthdate and output your age when a
#button is pressed.

from tkinter import *
from datetime import *

root=Tk()
root.geometry("700x500")
root.title("Age Calculator")

def calAge():
    today=date.today()
    d=int(day.get())
    m=int(month.get())
    y=int(year.get())
    age=today.year-y-((today.month,today.day)<(m,d))
    Label(text=f"Age is {age}").grid(row=5,column=0)
    
day=StringVar()
month=StringVar()
year=StringVar()

Label(text="Day").grid(row=1,column=0)
Label(text="Month").grid(row=2,column=0)
Label(text="Year").grid(row=3,column=0)

D=Entry(root,textvariable=day).grid(row=1,column=1)
Month=Entry(root,textvariable=month).grid(row=2,column=1)
Year=Entry(root,textvariable=year).grid(row=3,column=1) 

cal=Button(root,text="calculate",command=calAge).grid(row=4,column=1) 
root.mainloop()
