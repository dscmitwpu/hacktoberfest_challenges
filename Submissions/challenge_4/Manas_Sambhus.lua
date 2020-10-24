-- Read number of test cases
t=io.stdin:read("*number","*line")

for i=1,t do
	-- Read a,b
	local a,b=io.stdin:read("*n","*n","*l")

	-- Get the absolute difference between them
	local c=math.abs(a-b)

	-- Take max possible steps of 10
	local d=math.floor(c/10)

	-- Add 1 step if there is a remainder,
	-- and print the output
	print(c%10~=0 and d+1 or d)
	-- Like shell, 0 evaluates to true; Duh! :(
end