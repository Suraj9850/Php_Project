//Define an abstract class Shape with abstract methods area () and volume (). Derive
//abstract class Shape into two classes Cone and Cylinder. Write a java Program
// to calculate area and volume of Cone and Cylinder.(Use Super Keyword.)

import java.lang.Math.*;
import java.util.*;
abstract class Shape
{
	public abstract void area();
	public abstract void volume();
}
class Cone extends Shape
{
	int r,h;
	Cone(int r,int h)
	{
		this.h=h;
		this.r=r;
	}
	public void area()
	{
		int hei=h*h+r*r;
		double area=Math.PI*r*(r+Math.sqrt(hei));
		System.out.println("Area of cone is:"+area);
	}
	public void volume()
	{
		double vol=Math.PI*r*r*(h/3);
		System.out.println("Volume of cone is:"+vol+"\n");
	}
}
class Cylinder extends Shape
{
	int r,h;
	Cylinder(int r,int h)
	{
		this.h=h;
		this.r=r;
	}
	public void area()
	{
		double area=2*Math.PI*r*h+2*Math.PI*r*r;
		System.out.println("Area of cylinder is:"+area);
	}
	public void volume()
	{
		double vol=Math.PI*r*r*h;
		System.out.println("Volume of cylinder is:"+vol);
	}
}
class slip3_java2
{
	public static void main(String a[])
	{
		Scanner s=new Scanner(System.in);
		System.out.println("Enter the heigth of cone:");
		int h=s.nextInt();
		System.out.println("Enter the radius of cone:");
		int r=s.nextInt();

		System.out.println("Enter the heigth of cylinder:");
		int h1=s.nextInt();
		System.out.println("Enter the radius of cylinder:");
		int r1=s.nextInt();

		Shape sh=new Cone(r,h);
		Shape sh1=new Cylinder(r1,h1);

		sh.area();
		sh.volume();

		sh1.area();
		sh1.volume();
	}
}