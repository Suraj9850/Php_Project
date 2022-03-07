/*Write a java Program to display following pattern:
1
0 1
0 1 0
1 0 1 0 */

class slip9_java1
{
	public static void main(String a[])
	{
		int k=1;
		for(int i=0;i<4;i++)
		{	
			for(int j=0;j<=i;j++)
			{
				if(k==1)
				{
					System.out.print(k);
					k=0;
				}
				else
				{
					System.out.print(0);
					k=1;
				}
			}
			System.out.println();
		}
	}
}