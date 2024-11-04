#include<stdio.h>
void  main()
{
int a[10],i,n,in,pos;
printf("Enter the limit\n");
scanf("%d",&n);
printf("Enter the numbers\n");
for(i=0;i<n;i++)
scanf("%d",&a[i]);
printf("Array before insertion\n");
for(i=0;i<n;i++)
{
printf("%d\t",a[i]);
}
printf("\nEnter the position of  the new element to be inserted\n");
scanf("%d",&pos);
printf("Enter the new element\n");
scanf("%d",&in);
for(i=n;i>=pos;i--)
a[i]=a[i-1];
a[pos-1]=in;
n++;
printf("Array after  insertion\n");
for(i=0;i<n;i++)
printf("%d\t",a[i]);
printf("\n");
}




