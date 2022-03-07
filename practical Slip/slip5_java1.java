/*Write a java program to display following pattern:
5
4 5
3 4 5
2 3 4 5
1 2 3 4 5
*/

class slip5_java1
{
	
	public static void main(String a[])
	{
		int k=5;
		for(int i=0;i<5;i++)
		{
			int p=k;
			for(int j=0;j<=i;j++)
			{
				System.out.print(p);
				p++;
			}
			System.out.println();
			k--;	
		}
	}
}