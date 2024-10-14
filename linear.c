#include<stdio.h>
void main()
{
int i,n,a[100],ele;
printf("Enter the number of elements\n");
scanf("%d",&n);
printf("Enter the elements\n");
for(i=0;i<n;i++)
{
scanf("%d",&a[i]);
}
printf("Entered elemets are : \n");
for(i=0;i<n;i++)
{
printf("%d\t",a[i]);
}
printf("\n");
printf("Enter the element to bo searched\n");
scanf("%d",&ele);
for(i=0;i<n;i++)
{
if(a[i]==ele)
{
printf("%d found at the location %d",ele,i+1);
break;
}
if(a[i]==n)
{
printf("Element not found\n");
}
}
printf("\n");
}


