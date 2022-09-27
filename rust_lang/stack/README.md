# Stack implementation

[https://chercher.tech/rust/stack-rust](https://chercher.tech/rust/stack-rust)

```
$ cargo nextest run

   Compiling stack v0.1.0 (/Users/globalyoung/Documents/Project/Github/Php_Lang/rust_lang/stack)
    Finished test [unoptimized + debuginfo] target(s) in 0.17s

    Starting 3 tests across 1 binaries
     Running [ 00:00:00] [                         ] 0/3: 1 running, 0 passed, 0 s     Running [ 00:00:00] [                         ] 0/3: 1 running, 0 passed, 0 s     Running [ 00:00:00] [                         ] 0/3: 1 running, 0 passed, 0 s     Running [ 00:00:00] [                         ] 0/3: 1 running, 0 passed, 0 s     Running [ 00:00:00] [                         ] 0/3: 1 running, 0 passed, 0 s     Running [ 00:00:00] [                         ] 0/3: 2 running, 0 passed, 0 s     Running [ 00:00:00] [                         ] 0/3: 2 running, 0 passed, 0 s     Running [ 00:00:00] [                         ] 0/3: 2 running, 0 passed, 0 s     Running [ 00:00:00] [                         ] 0/3: 2 running, 0 passed, 0 s     Running [ 00:00:00] [                         ] 0/3: 2 running, 0 passed, 0 s     Running [ 00:00:00] [                         ] 0/3: 3 running, 0 passed, 0 s     Running [ 00:00:00] [                         ] 0/3: 3 running, 0 passed, 0 s     Running [ 00:00:00] [                         ] 0/3: 3 running, 0 passed, 0 s        PASS [   0.002s] stack tests::test_new_with_capacity
     Running [ 00:00:00] [                         ] 0/3: 3 running, 0 passed, 0 s     Running [ 00:00:00] [                         ] 0/3: 3 running, 0 passed, 0 s     Running [ 00:00:00] [                         ] 0/3: 2 running, 1 passed, 0 s     Running [ 00:00:00] [                         ] 0/3: 2 running, 1 passed, 0 s     Running [ 00:00:00] [========>                ] 1/3: 2 running, 1 passed, 0 s        PASS [   0.002s] stack tests::test_push_maxsize
     Running [ 00:00:00] [========>                ] 1/3: 2 running, 1 passed, 0 s     Running [ 00:00:00] [========>                ] 1/3: 2 running, 1 passed, 0 s     Running [ 00:00:00] [========>                ] 1/3: 1 running, 2 passed, 0 s     Running [ 00:00:00] [========>                ] 1/3: 1 running, 2 passed, 0 s     Running [ 00:00:00] [================>        ] 2/3: 1 running, 2 passed, 0 s        PASS [   0.002s] stack tests::test_push
     Running [ 00:00:00] [================>        ] 2/3: 1 running, 2 passed, 0 s     Running [ 00:00:00] [================>        ] 2/3: 1 running, 2 passed, 0 s     Running [ 00:00:00] [================>        ] 2/3: 0 running, 3 passed, 0 s     Running [ 00:00:00] [================>        ] 2/3: 0 running, 3 passed, 0 s     Running [ 00:00:00] [=========================] 3/3: 0 running, 3 passed, 0 s------------
     Summary [   0.007s] 3 tests run: 3 passed, 0 skipped
     Running [ 00:00:00] [=========================] 3/3: 0 running, 3 passed, 0 s
```
