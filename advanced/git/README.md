Knowing what version we are running can be exposed by an environment variable,
set at build.

	docker build -t phpgit --build-arg COMMIT=$(git describe --always) .
	docker run --rm -p 2015:2015 phpgit
