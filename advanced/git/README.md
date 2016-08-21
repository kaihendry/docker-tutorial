	docker build -t phpgit --build-arg COMMIT=$(git describe --always) .
	docker run --name phpaws --rm -p 2015:2015 phpgit
