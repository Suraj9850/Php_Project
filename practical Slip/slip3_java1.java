// Write a ‘java’ program to check whether given number is Armstrong or not.
//(Use static keyword)

import java.util.*;

class slip3_java1
{
	public static void main(String a[])
	{
		Scanner s=new Scanner(System.in);
		System.out.println("Enter the no:");
		int no=s.nextInt();
		int temp=no;
		int sum=0;
		while(no!=0)
		{
			int dig=no%10;
			sum=sum+dig*dig*dig;
			no=no/10;

		}
		if(temp==sum)
		{
			System.out.println(temp+" Is armstrong no....");
		}
		else
		{
			System.out.println(temp+" Is not armstrong no....");
		}
	}
}