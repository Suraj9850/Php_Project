// Design a screen in Java to handle the Mouse Events such as MOUSE_MOVED and
//MOUSE_CLICK and display the position of the Mouse_Click in a TextField.

import java.awt.*;
import javax.swing.*;
import java.awt.event.*;

public class slip2_java2 extends JFrame implements MouseListener
{
	JTextField	 t1,t2;
	Label l1,l2;
	JFrame f;
	slip2_java2()
	{
		f=new JFrame();
		f.setSize(500,500);
		f.setVisible(true);
		f.setDefaultCloseOperation(EXIT_ON_CLOSE);
		f.setTitle("Cordinates");
		
		l1=new Label("X:");
		l2=new Label("Y:");
		t1=new JTextField(20);
		t2=new JTextField(20);
		
		f.add(l1);
		f.add(l2);
		f.add(t1);
		f.add(t2);
		
		l1.setBounds(20,20,20,30);
		l2.setBounds(20,60,20,30);
		t1.setBounds(45,20,200,30);
		t2.setBounds(45,60,200,30);

		f.setLayout(null);
		f.addMouseListener(this);	
	}
	public void mouseClicked(MouseEvent e)
	{
		int x=e.getX();
		int y=e.getY();
		t1.setText(Integer.toString(x));
		t2.setText(Integer.toString(y));
	}
	public void mousePressed(MouseEvent e)
	{
		int x=e.getX();
		int y=e.getY();
		t1.setText(Integer.toString(x));
		t2.setText(Integer.toString(y));
	}
	public void mouseReleased(MouseEvent e)
	{
		int x=e.getX();
		int y=e.getY();
		t1.setText(Integer.toString(x));
		t2.setText(Integer.toString(y));
	}
	public void mouseMoved(MouseEvent e)
	{
		int x=e.getX();
		int y=e.getY();
		t1.setText(Integer.toString(x));
		t2.setText(Integer.toString(y));
	}
	public void mouseEntered(MouseEvent e)
	{
		int x=e.getX();
		int y=e.getY();
		t1.setText(Integer.toString(x));
		t2.setText(Integer.toString(y));
	}
	public void mouseExited(MouseEvent e)
	{
		int x=e.getX();
		int y=e.getY();
		t1.setText(Integer.toString(x));
		t2.setText(Integer.toString(y));
	}
	public static void main(String a[])
	{
		new slip2_java2();
	}
}
