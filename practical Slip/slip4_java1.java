//Write a java program using Applet to implement a simple arithmetic calculator.
/*Write a java program to implement a simple arithmetic calculator. Perform appropriate validations.*/

import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

class B1_labbook extends JFrame implements ActionListener
{
	JTextField t;
	JButton b1,b2,b3,b4,b5,b6,b7,b8,b9,b0,add,min,mul,div,eq,c;
	static int a=0,b=0,res=0,op=0;
	B1_labbook()
	{
		setSize(500,500);
		setTitle("Calculator");
		setLayout(null);
		setVisible(true);
		setDefaultCloseOperation(EXIT_ON_CLOSE);
		Font f=new Font("Arial",Font.BOLD,25);
		Font f1=new Font("Arial",Font.BOLD,16);
		t=new JTextField(20);
		t.setFont(f);
		t.setBounds(20,20,400,50);
		b7=new JButton("7");
		b7.setFont(f1);
		b7.setBounds(20,72,97,40);
		b8=new JButton("8");
		b8.setFont(f1);
		b8.setBounds(121,72,97,40);
		b9=new JButton("9");
		b9.setFont(f1);
		b9.setBounds(220,72,97,40);
		add=new JButton("+");
		add.setFont(f1);
		add.setBounds(325,72,95,40);
		b4=new JButton("4");
		b4.setBounds(20,114,97,40);
		b5=new JButton("5");
		b5.setFont(f1);
		b5.setBounds(121,114,97,40);
		b6=new JButton("6");
		b6.setFont(f1);
		b6.setBounds(220,114,97,40);
		min=new JButton("-");	
		min.setFont(f1);
		min.setBounds(325,114,95,40);
		b1=new JButton("1");
		b1.setFont(f1);
		b1.setBounds(20,156,97,40);
		b2=new JButton("2");
		b2.setFont(f1);
		b2.setBounds(121,156,97,40);
		b3=new JButton("3");
		b3.setFont(f1);
		b3.setBounds(220,156,97,40);
		mul=new JButton("*");
		mul.setFont(f1);
		mul.setBounds(325,156,95,40);
		b0=new JButton("0");	
		b0.setFont(f1);
		b0.setBounds(121,198,97,40);
		div=new JButton("/");
		div.setFont(f1);
		div.setBounds(325,198,95,40);
		eq=new JButton("=");
		eq.setFont(f1);
		eq.setBounds(325,240,95,40);
		c=new JButton("Clear");
		c.setFont(f1);
		c.setBounds(126,260,150,40);
		add(t);
		add(b7);
		add(b8);
		add(b9);
		add(add);
		add(b4);
		add(b5);
		add(b6);
		add(min);
		add(b1);
		add(b2);
		add(b3);
		add(mul);
		add(b0);
		add(div);
		add(eq);
		add(c);
		b1.addActionListener(this);
		b2.addActionListener(this);
		b3.addActionListener(this);
		b4.addActionListener(this);
		b5.addActionListener(this);
		b6.addActionListener(this);
		b7.addActionListener(this);
		b8.addActionListener(this);
		b9.addActionListener(this);
		b0.addActionListener(this);
		add.addActionListener(this);
		min.addActionListener(this);
		mul.addActionListener(this);
		div.addActionListener(this);
		eq.addActionListener(this);
		c.addActionListener(this);
	
	}
	public void actionPerformed(ActionEvent e)
	{
		
		if(e.getSource()==b1)	
		{
			t.setText(t.getText()+"1");
		}
		if(e.getSource()==b2)
		{
			t.setText(t.getText()+"2");
		}
		if(e.getSource()==b3)
		{
			t.setText(t.getText()+"3");
		}
		if(e.getSource()==b4)
		{
			t.setText(t.getText()+"4");
		}
		if(e.getSource()==b5)
		{
			t.setText(t.getText()+"5");
		}
		if(e.getSource()==b6)
		{
			t.setText(t.getText()+"6");
		}
		if(e.getSource()==b7)
		{
			t.setText(t.getText()+"7");
		}
		if(e.getSource()==b8)
		{
			t.setText(t.getText()+"8");
		}
		if(e.getSource()==b9)
		{
			t.setText(t.getText()+"9");
		}
		if(e.getSource()==b0)
		{
			t.setText(t.getText()+"0");
		}
		if(e.getSource()==add)
		{
			a=Integer.parseInt(t.getText());
			op=1;
			t.setText("");
		}
		if(e.getSource()==min)
		{
			a=Integer.parseInt(t.getText());
			op=2;
			t.setText("");
		}
		if(e.getSource()==mul)
		{
			a=Integer.parseInt(t.getText());
			op=3;
			t.setText("");
		}
		if(e.getSource()==div)
		{
			a=Integer.parseInt(t.getText());
			op=4;
			t.setText("");
		}
		if(e.getSource()==c)
		{
			t.setText("");
		}
		if(e.getSource()==eq)
		{
			try
			{
				b=Integer.parseInt(t.getText());
			}
			catch(NumberFormatException ne)
			{
				System.out.println("Enter no..");
			}
			
			switch(op)
			{
				case 1:
					res=a+b;
					break;
				case 2:
					res=a-b;
					break;
				case 3:
					res=a*b;
					break;
				case 4:
					try{
						res=a/b;
					}
					catch(ArithmeticException ne)
					{
				System.out.println("Not valid..");
					}
					break;
				default:
					res=0;
			}
			System.out.println(a+"+"+b+"="+res);
			t.setText(Integer.toString(res));
		}
	}
	public static void main(String a[])
	{
		new B1_labbook();
	}
}
