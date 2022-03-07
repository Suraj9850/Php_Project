/*Define an Interface Shape with abstract method area(). Write a java program to
calculate an area of Circle and Sphere.(use final keyword) */


interface Shape
{
	public abstract void area(int r);
	final double pi=3.14;
}
class circle implements Shape
{
	public void area(int r)
	{
		System.out.println("Area of circle is:"+pi*r*r);
	}
}
class sphare implements Shape
{
	public void area(int r)
	{
		System.out.println("Area of sphare is:"+4*pi*r*r);
	}
}
class slip8_java1
{
	public static void main(String a[])
	{
		circle c=new circle();
		sphare s=new sphare();
		c.area(6);
		s.area(4);
	}
}