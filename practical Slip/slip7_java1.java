

import java.awt.*;

class slip7_java1 extends Frame
{
	
	slip7_java1()
	{
		setBackground(Color.red);
		setSize(300,400);
		Font f=new Font("Arial",Font.BOLD,20);
		setVisible(true);
		setLayout(new FlowLayout());
		Label l1=new Label("Dr. D Y Patil College");
		l1.setFont(f);
		add(l1);
	}
	public static void main(String a[])
	{
		new slip7_java1();
	}
}