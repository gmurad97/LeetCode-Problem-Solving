int SingleNumber(int[] nums)
{
    int uniqueNum = 0;
    foreach (int num in nums)
    {
        uniqueNum ^= num;
    }
    return uniqueNum;
}