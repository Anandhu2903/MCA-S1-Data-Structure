#include<stdio.h>
void main()
{
int i,a[100],n,pos;
printf("\nenter array limit : ");
scanf("%d",&n);
printf("\nenter array elements :\n");
for(i=1;i<=n;i++)
{
scanf("%d",&a[i]);
}       
printf("\n Array elements are : \n");
for(i=1;i<=n;i++)
{
printf("\t%d",a[i]);
}
printf("\n Enter the position to be deleted  : \n");
scanf("%d",&pos);
for(i=pos;i<=n;i++)
{
a[i]=a[i+1];
}
printf("\n Array after deletion: ");
for(i=1;i<=n-1;i++)
{
printf("\t%d",a[i]);
}
printf("\n");
}
